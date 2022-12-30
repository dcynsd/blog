<?php

namespace App\Admin\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use App\Models\Category;
// use App\Admin\Repositories\Post;
use Dcat\Admin\Http\Controllers\AdminController;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Post::with('category', 'tags')->withoutGlobalScopes(), function (Grid $grid) {
            $grid->column('id')->sortable();
            // $grid->column('category_id');
            $grid->column('title')->limit(20, '...');
            // $grid->column('sub_title');
            $grid->column('image')->image('', 40, 40);
            // $grid->column('content');
            // $grid->column('excerpt');
            // $grid->column('slug');
            // $grid->column('author');
            // $grid->column('original_url');
            $grid->column('view_count');
            // $grid->column('word_count');
            $grid->column('order')->editable();
            $grid->column('is_issued')->switch();
            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();
        
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
        return Show::make($id, Post::withoutGlobalScopes(), function (Show $show) {
            $show->field('id');
            $show->field('category_id');
            $show->field('title');
            $show->field('sub_title');
            $show->field('image')->image('', 50, 50);
            $show->field('content');
            $show->field('excerpt');
            $show->field('slug');
            $show->field('author');
            $show->field('original_url');
            $show->field('view_count');
            $show->field('word_count');
            $show->field('order');
            $show->field('is_issued')->as(function ($value) {
                return $value ? '是' : '否';
            });
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
        return Form::make(Post::with('tags')->withoutGlobalScopes(), function (Form $form) {
            $form->display('id');
            $form->select('category_id')
                ->options(Category::all()->pluck('name', 'id'))
                ->required()->rules('required');
            $form->multipleSelect('tags')
                ->options(Tag::all()->pluck('name', 'id'))
                ->customFormat(function ($v) {
                    if (!$v) {
                        return [];
                    }
                    return array_column($v, 'id');
                });
            $form->text('title')->required();
            $form->text('sub_title')->required();
            $form->image('image')->required();
            $form->markdown('content')->required();
            // $form->text('excerpt');
            // $form->text('slug');
            $form->text('author');
            $form->url('original_url');
            // $form->text('view_count');
            // $form->text('word_count');
            $form->number('order');
            $form->switch('is_issued');
        
            // $form->display('created_at');
            // $form->display('updated_at');
        });
    }
}
