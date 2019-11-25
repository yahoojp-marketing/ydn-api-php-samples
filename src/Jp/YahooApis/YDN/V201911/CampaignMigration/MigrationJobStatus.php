<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class MigrationJobStatus
{
    const __default = 'NOT_STARTED';
    const NOT_STARTED = 'NOT_STARTED';
    const IN_PROGRESS = 'IN_PROGRESS';
    const COMPLETED = 'COMPLETED';
    const FILE_FORMAT_ERROR = 'FILE_FORMAT_ERROR';
    const INVALID_CSV_VALUE_ERROR = 'INVALID_CSV_VALUE_ERROR';
    const UNKNOWN_CSV_FIELD_ERROR = 'UNKNOWN_CSV_FIELD_ERROR';
    const SYSTEM_ERROR = 'SYSTEM_ERROR';


}
