<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserOrder;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserOrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserOrder(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('order_no');
            $grid->column('order_amount');
            $grid->column('order_title');
            $grid->column('order_time');
            $grid->column('order_source');
            $grid->column('order_name');
            $grid->column('order_indentify');
            $grid->column('order_adult');
            $grid->column('order_child');
            $grid->column('travel_date');
            $grid->column('status');
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
        return Show::make($id, new UserOrder(), function (Show $show) {
            $show->field('id');
            $show->field('order_no');
            $show->field('order_amount');
            $show->field('order_title');
            $show->field('order_time');
            $show->field('order_source');
            $show->field('order_name');
            $show->field('order_indentify');
            $show->field('order_adult');
            $show->field('order_child');
            $show->field('travel_date');
            $show->field('status');
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
        return Form::make(new UserOrder(), function (Form $form) {
            $form->display('id');
            $form->text('order_no');
            $form->text('order_amount');
            $form->text('order_title');
            $form->text('order_time');
            $form->text('order_source');
            $form->text('order_name');
            $form->text('order_indentify');
            $form->text('order_adult');
            $form->text('order_child');
            $form->text('travel_date');
            $form->text('status');
            $form->text('website');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
