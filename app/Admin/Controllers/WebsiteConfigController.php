<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WebsiteConfig;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class WebsiteConfigController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new WebsiteConfig(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('webxin');
            $grid->column('telephone');
            $grid->column('domain');
            $grid->column('icp');
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
        return Show::make($id, new WebsiteConfig(), function (Show $show) {
            $show->field('id');
            $show->field('webxin');
            $show->field('telephone');
            $show->field('domain');
            $show->field('icp');
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
        return Form::make(new WebsiteConfig(), function (Form $form) {
            $form->display('id');
            $form->text('webxin');
            $form->text('telephone');
            $form->text('domain');
            $form->text('icp');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
