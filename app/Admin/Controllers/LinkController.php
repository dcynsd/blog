<?php

namespace App\Admin\Controllers;

use App\Models\Link;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LinkController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Link(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('avatar')->image('', 50, 50);
            $grid->column('name');
            $grid->column('title');
            $grid->column('url')->link();
            $grid->column('order')->editable()->sortable();
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
        return Show::make($id, new Link(), function (Show $show) {
            $show->field('id');
            $show->field('avatar');
            $show->field('name');
            $show->field('order');
            $show->field('title');
            $show->field('url');
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
        return Form::make(new Link(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required()->rules('required');
            $form->text('title')->required()->rules('required');
            $form->text('avatar')->required()->rules('required');
            $form->url('url')->required()->rules('required');
            $form->number('order')->min(0);
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
