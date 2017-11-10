<?php
$lang->score->common       = 'My Score';
$lang->score->record       = 'Score Record';
$lang->score->current      = 'Current Score';
$lang->score->level        = 'Level Score';
$lang->score->reset        = 'Reset';
$lang->score->tips         = 'Yesterday added score: <strong>%d</strong><br/>Total score: <strong>%d</strong>';
$lang->score->resetTips    = 'It will take a long time. <strong>Do not close the window.</strong>';
$lang->score->resetStart   = 'Start';
$lang->score->resetLoading = 'Processing: ';
$lang->score->resetFinish  = 'Finished';

$lang->score->id      = 'ID';
$lang->score->userID  = 'UserID';
$lang->score->account = 'User';
$lang->score->module  = 'Module';
$lang->score->method  = 'Method';
$lang->score->before  = 'Before';
$lang->score->score   = 'Score';
$lang->score->after   = 'After';
$lang->score->time    = 'Time';
$lang->score->desc    = 'Description';
$lang->score->noLimit = 'No limited';
$lang->score->times   = 'Times';
$lang->score->hour    = 'Hour';

$lang->score->modules['task']        = 'Task';
$lang->score->modules['tutorial']    = 'Tutorial';
$lang->score->modules['user']        = 'User';
$lang->score->modules['ajax']        = 'Other';
$lang->score->modules['doc']         = 'Doc';
$lang->score->modules['todo']        = 'Todo';
$lang->score->modules['story']       = 'Story';
$lang->score->modules['bug']         = 'Bug';
$lang->score->modules['testcase']    = 'TestCase';
$lang->score->modules['testtask']    = 'TestTask';
$lang->score->modules['build']       = 'Build';
$lang->score->modules['project']     = 'Project';
$lang->score->modules['productplan'] = 'Plan';
$lang->score->modules['release']     = 'Release';
$lang->score->modules['block']       = 'Block';
$lang->score->modules['search']      = 'Search';

$lang->score->methods['task']['create']              = 'Create task';
$lang->score->methods['task']['close']               = 'Close task';
$lang->score->methods['task']['finish']              = 'Finish task';
$lang->score->methods['tutorial']['finish']          = 'Finish tutorial';
$lang->score->methods['user']['login']               = 'Login';
$lang->score->methods['user']['changePassword']      = 'Change password';
$lang->score->methods['user']['editProfile']         = 'Edit profile';
$lang->score->methods['ajax']['selectTheme']         = 'Change theme';
$lang->score->methods['ajax']['selectLang']          = 'Change lang';
$lang->score->methods['ajax']['showSearchMenu']      = 'Advanced search';
$lang->score->methods['ajax']['customMenu']          = 'Custom menu';
$lang->score->methods['ajax']['dragSelected']        = 'Drag selected';
$lang->score->methods['ajax']['lastNext']            = 'Page turned';
$lang->score->methods['ajax']['switchToDataTable']   = 'Switch dataTable';
$lang->score->methods['ajax']['submitPage']          = 'Change page number';
$lang->score->methods['ajax']['quickJump']           = 'Quick jump';
$lang->score->methods['ajax']['batchCreate']         = 'Batch create';
$lang->score->methods['ajax']['batchEdit']           = 'Batch update';
$lang->score->methods['ajax']['batchOther']          = 'Batch other';
$lang->score->methods['doc']['create']               = 'Create doc';
$lang->score->methods['todo']['create']              = 'Create todo';
$lang->score->methods['story']['create']             = 'Create story';
$lang->score->methods['story']['close']              = 'Close story';
$lang->score->methods['bug']['create']               = 'Create bug';
$lang->score->methods['bug']['confirmBug']           = 'Confirm bug';
$lang->score->methods['bug']['createFormCase']       = 'Create bug form case';
$lang->score->methods['bug']['resolve']              = 'Resolve bug';
$lang->score->methods['bug']['saveTplModal']         = 'Bug save template';
$lang->score->methods['testtask']['runCase']         = 'Run test case';
$lang->score->methods['testcase']['create']          = 'Create test case';
$lang->score->methods['build']['create']             = 'Create build';
$lang->score->methods['project']['create']           = 'Create project';
$lang->score->methods['project']['close']            = 'Project finish';
$lang->score->methods['productplan']['create']       = 'Create plan';
$lang->score->methods['release']['create']           = 'Create release';
$lang->score->methods['block']['set']                = 'Custom block';
$lang->score->methods['search']['saveQuery']         = 'Save search query';
$lang->score->methods['search']['saveQueryAdvanced'] = 'Advanced search';

$lang->score->extended['user']['changePassword'] = 'Password strength, medium:add extra score : ##strength,1##; Strong:add extra score : ##strength,2##.';
$lang->score->extended['project']['close']       = 'Project closed, PM add extra score : ##manager,close##,Team member add extra score : ##member,close##. Completed on schedule or in advance,PM add extra score : ##manager,in##,Team member Add extra score : ##member,in##.';
$lang->score->extended['bug']['resolve']         = 'Bug resolved, Add extra severity score ：s1 + ##severity,3##, s2 + ##severity,2##, s3 + ##severity,1##。';
$lang->score->extended['bug']['confirmBug']      = 'Bug confirmed, Add extra severity score ：s1 + ##severity,3##, s2 + ##severity,2##, s3 + ##severity,1##。';
$lang->score->extended['task']['finish']         = 'Task finished, Add extra score round(consumed /10 * estimate / consumed) + severity score(p1 ##pri,1##, p2, ##pri,2##)。';
$lang->score->extended['story']['close']         = 'Add extra score for story creator : ##createID##.';
