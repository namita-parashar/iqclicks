<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Rule;
use App\Models\Tracker\RuleCondition;

class RuleConditionHelper{

    public static function create(Rule $rule,$data=[]){
        $rule_condition = new RuleCondition;
        $rule_condition->tracker_rule_id = $rule->id;
        $rule_condition->condition_field = $data['condition_field'] ?? "";
        $rule_condition->condition_operator = $data['condition_operator'] ?? "";
        $rule_condition->condition_value = $data['condition_value'] ?? "";
        $rule_condition->save();
        return $rule_condition;
    }

    public static function update(RuleCondition $rule_condition ,Rule $rule,$data=[]){
        $rule_condition->tracker_rule_id = $rule->id ?? $rule_condition->tracker_rule_id;
        $rule_condition->condition_field = $data['condition_field'] ??  $rule_condition->condition_field;
        $rule_condition->condition_operator = $data['condition_operator'] ?? $rule_condition->condition_operator;
        $rule_condition->condition_value = $data['condition_value'] ?? $rule_condition->condition_value;
        $rule_condition->save();
        return $rule_condition;
    }

    public static function delete(RuleCondition $rule_condition){
        return $rule_condition->delete();
    }
}