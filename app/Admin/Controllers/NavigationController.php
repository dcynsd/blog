<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use App\Admin\Repositories\Navigation;
use Dcat\Admin\Http\Controllers\AdminController;

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
            // $grid->column('parent_id');
            $grid->column('name');
            $grid->column('sub_title');
            $grid->column('url');
            $grid->column('image')->image('', 40, 40);
            $grid->column('height');
            $grid->column('is_scroll_down_bar');
            $grid->column('icon');
            $grid->column('order')->editable();
        
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
            $show->field('parent_id');
            $show->field('name');
            $show->field('sub_title');
            $show->field('url');
            $show->field('image');
            $show->field('height');
            $show->field('is_scroll_down_bar');
            $show->field('icon');
            $show->field('order');
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
            // $form->text('parent_id');
            $form->text('name')->required();
            $form->text('sub_title');
            $form->url('url')->required();
            $form->image('image');
            $form->text('height');
            $form->switch('is_scroll_down_bar');
            $form->text('icon');
            $form->number('order')->min(0);
        });
    }
}
