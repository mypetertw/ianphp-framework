<?
if ($DATABASE_ENABLE && !TABLE_EXIST('user')) {
    exit ('SOMETHING WENT WRONG: USER TABLE NOT EXIST.');
}

if ($DATABASE_ENABLE && !TABLE_EXIST('setting')) {
    exit ('SOMETHING WENT WRONG: SETTING TABLE NOT EXIST.');
}

if ($DATABASE_ENABLE && !TABLE_EXIST('permission')) {
    exit ('SOMETHING WENT WRONG: PERMISSION TABLE NOT EXIST.');
}