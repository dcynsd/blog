<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Post::with('category', 'tags'), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('category.name', '分类名称');
            $grid->column('tags')->pluck('name')->label();
            $grid->column('title');
            $grid->column('sub_title');
            $grid->column('slug');
            $grid->column('author');
            $grid->column('original_url');
            $grid->column('view_count');
            $grid->column('order')->editable(true);
            $grid->column('is_issued')->switch();
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Post(), function (Show $show) {
            $show->field('id');
            $show->field('category_id');
            $show->field('title');
            $show->field('sub_title');
            $show->field('content');
            $show->field('excerpt');
            $show->field('slug');
            $show->field('author');
            $show->field('original_url');
            $show->field('view_count');
            $show->field('order');
            $show->field('is_issued');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(Post::with('tags'), function (Form $form) {
            $form->display('id');
            $form->select('category_id')
                ->options(Category::all()->pluck('name', 'id'))
                ->required()
                ->rules('required');
            $form->multipleSelect('tags')
                ->options(Tag::all()->pluck('name', 'id'))
                ->customFormat(function ($v) {
                    if (! $v) {
                        return [];
                    }
                    return array_column($v, 'id');
                });
            $form->text('title')->required()->rules('required');
            $form->text('sub_title')->required()->rules('required');
            $form->markdown('content')->required()->rules('required');
            $form->text('excerpt');
            $form->text('slug');
            $form->text('author');
            $form->text('original_url');
            $form->number('order')->min(0)->rules('min:0');
            $form->switch('is_issued');
        });
    }
}
