<?
/*
| NOTE: HANDLER VERIFICATION BY BACKEND
*/
if (HANDLER != HANDLER_SELF) {
    exit (Server\Response::FAILED('BAD_HANDLER' . HANDLER_SELF, true, HANDLER, NOW_SELF, 'error-msg'));
}
