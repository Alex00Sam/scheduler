<?php
namespace Model;

class Teacher extends \atk4\data\Model {
    public $table = 'teacher';
    public $title = 'Skolotaja';
    public $name = 'Учитель';

    function init() {
        parent::init();

        $this->addField('name',['caption'=>'Vards un uzvards','required'=>TRUE]);
        $this->addField('contact_phone',['caption'=>'Kont. numurs','required'=>TRUE]);

        $this->hasOne('subject_id', [new Subject(),'caption'=>'Stunda'])
            ->addTitle();

        $this->getElement('subject_id')->ui['visible'] = false;

        $this->hasMany('Vecaki', new Vecaki);

    }
}
