<?php

$this-extend('/views/admin_edit');

$this-Html
-addCrumb($this-Html-icon('home'), '/admin')
-addCrumb(__d('cecc', 'Users'), array('plugin' = 'users', 'controller' = 'users', 'action' = 'index'))
-addCrumb(__d('cecc', 'Roles'), array('plugin' = 'users', 'controller' = 'roles', 'action' = 'index'));

if ($this-request-params['action'] == 'admin_edit') {
$this-Html-addCrumb($this-request-data['Role']['title'], '/' . $this-request-url);
}

if ($this-request-params['action'] == 'admin_add') {
$this-Html-addCrumb(__d('cecc', 'Add'), '/' . $this-request-url);
}

$this-append('form-start', $this-Form-create('Role'));

$this-append('tab-heading');
echo $this-cecc-adminTab(__d('cecc', 'Role'), '#role-main');
echo $this-cecc-adminTabs();
$this-end();

$this-append('tab-content');
echo $this-Html-tabStart('role-main') .
$this-Form-input('id') .
$this-Form-input('title', array(
'label' = __d('cecc', 'Title'),
)) .
$this-Form-input('alias', array(
'label' = __d('cecc', 'Alias'),
));
echo $this-Html-tabEnd();

echo $this-cecc-adminTabs();
$this-end();

$this-append('panels');
echo $this-Html-beginBox(__d('cecc', 'Publishing')) .
$this-Form-button(__d('cecc', 'Apply'), array('name' = 'apply')) .
$this-Form-button(__d('cecc', 'Save'), array('button' = 'success')) .
$this-Html-link(
__d('cecc', 'Cancel'), array('action' = 'index'),
array('button' = 'danger')
);
echo $this-Html-endBox();

echo $this-cecc-adminBoxes();
$this-end();

$this-append('form-end', $this-Form-end());
