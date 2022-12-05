<?php

namespace TCG\Voyager\Actions;

class EspecialAction extends AbstractAction
{
    public function getTitle()
    {
        //return __('voyager::generic.delete');
        return "Comprar";
    }

    public function getIcon()
    {
        return 'voyager-plus';
    }

    public function getPolicy()
    {
        return 'especial';
    }

    public function getAttributes()
    {
        return [
            'class'   => 'btn btn-sm btn-success pull-right especial',
            'data-id' => $this->data->{$this->data->getKeyName()},
            'id'      => 'delete-'.$this->data->{$this->data->getKeyName()},
            'data-target' => "#examplemodal",
            'data-codigo' => $this->data->codigo ,
            'data-name' => $this->data->name ,
            
        ];
    }

    public function getDefaultRoute()
    {
        //return 'http://localhost:8000/admin/productos/1/edit/'.$this->data->{$this->data->getKeyName()};
        return 'javascript:;';
    }
}
