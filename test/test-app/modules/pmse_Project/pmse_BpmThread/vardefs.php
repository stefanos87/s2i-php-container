<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['pmse_BpmThread'] = array(
    'table' => 'pmse_bpm_thread',
    'audited' => false,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'reassignable' => false,
    'fields' => array(
        'cas_id' => array(
            'required' => true,
            'name' => 'cas_id',
            'vname' => 'Unique Identifier for this Case',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'cas_thread_index' => array(
            'required' => true,
            'name' => 'cas_thread_index',
            'vname' => 'Case thread index a sequential number relative to each case',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'cas_thread_parent' => array(
            'required' => true,
            'name' => 'cas_thread_parent',
            'vname' => 'Parent thread',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'cas_thread_status' => array(
            'required' => true,
            'name' => 'cas_thread_status',
            'vname' => 'Thread status',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'OPEN',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '32',
            'size' => '32',
        ),
        'cas_flow_index' => array(
            'required' => true,
            'name' => 'cas_flow_index',
            'vname' => 'Case flow index',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'cas_thread_tokens' => array(
            'required' => true,
            'name' => 'cas_thread_tokens',
            'vname' => 'tokens evaluated in this thread',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'cas_thread_passes' => array(
            'required' => true,
            'name' => 'cas_thread_passes',
            'vname' => 'times the thread was routed',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
    ),
    'indices' => array(
        array(
            'name' => 'idx_pmse_bpm_thread_del_cas_id',
            'type' => 'index',
            'fields' => array(
                'cas_id',
                'deleted',
            ),
        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
    'ignore_templates' => array(
        'taggable',
        'lockable_fields',
        'commentlog',
    ),
    'uses' => array(
        'basic',
        'assignable',
    ),
);

VardefManager::createVardef('pmse_BpmThread', 'pmse_BpmThread');
