<?php

namespace App\Admin\Controllers;

use App\Models\Navigation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class NavigationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Navigation(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('height');
            $grid->column('icon');
            $grid->column('image')->image('', 50, 50);
            $grid->column('is_scroll_down_bar')->switch();
            $grid->column('name');
            $grid->column('order')->editable();
            $grid->column('parent_id');
            $grid->column('sub_title')->editable();
            $grid->column('url');

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
        return Show::make($id, new Navigation(), function (Show $show) {
            $show->field('id');
            $show->field('height');
            $show->field('icon');
            $show->field('image');
            $show->field('is_scroll_down_bar');
            $show->field('name');
            $show->field('order');
            $show->field('parent_id');
            $show->field('sub_title');
            $show->field('url');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Navigation(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required()->rules('required');
            $form->text('sub_title');
            $form->text('url')->required()->rules('required');
            $form->text('height');
            $form->text('icon');
            $form->image('image');
            $form->switch('is_scroll_down_bar');
            $form->number('order')->min(0);
            $form->select('parent_id')->options(Navigation::all()->pluck('name', 'id'));
        });
    }
}
