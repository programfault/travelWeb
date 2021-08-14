<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserSetMenu;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserSetMenuController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserSetMenu(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('orignal_price');
            $grid->column('current_price');
            $grid->column('child_price');
            $grid->column('description');
            $grid->column('amount');
            $grid->column('website');
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
        return Show::make($id, new UserSetMenu(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('orignal_price');
            $show->field('current_price');
            $show->field('child_price');
            $show->field('description');
            $show->field('amount');
            $show->field('website');
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
        return Form::make(new UserSetMenu(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('orignal_price');
            $form->text('current_price');
            $form->text('child_price');
            $form->text('description');
            $form->text('amount');
            $form->text('website');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
