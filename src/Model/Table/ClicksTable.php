<?php
namespace App\Model\Table;

use App\Model\Entity\Click;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clicks Model
 *
 */
class ClicksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('clicks');
        $this->displayField('click_id');
        $this->primaryKey('click_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('page');

        $validator
            ->allowEmpty('ip');

        $validator
            ->dateTime('crt_ts')
            ->allowEmpty('crt_ts');

        $validator
            ->allowEmpty('crt_usr');

        return $validator;
    }
}
