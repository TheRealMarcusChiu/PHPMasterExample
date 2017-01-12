<?php

require_once '../../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('LOGNAME');
$log->pushHandler(new StreamHandler(__DIR__ . '/log.log', Logger::DEBUG));

$log->info('info');
$log->addInfo('info');

$log->alert('alert');
$log->addAlert('alert');

$log->crit('crit');
$log->critical('critical');
$log->addCritical('critical');

$log->debug('debug');
$log->addDebug('debug');

$log->emerg('emerg');
$log->emergency('emergency');
$log->addEmergency('emergency');

$log->err('err');
$log->error('error');
$log->addError('error');

$log->notice('notice');
$log->addNotice('notice');

$log->warn('warn');
$log->warning('warning');
$log->addWarning('warning');



