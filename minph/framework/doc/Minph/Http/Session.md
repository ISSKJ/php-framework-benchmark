# @class Minph\Http\Session

 Session utility class.

## @method (static) init

 [SESSION_EXPIRATION] in .env is configured.(default=`60*60`)  
 [SERVER_SESSION_EXPIRATION] in .env is configured.(default=`60*60`)

## @method (static) getExpiration
* @return int expiration in second

## @method (static) get
* @param string `$key`
* @return session value

## @method (static) has
* @param string `$key`
* @return boolean If session has the key, true. Otherwise, false.

## @method (static) set
* @param string `$key`
* @param `$value`

## @method (static) destroy

 Destroy the session.




>Generated by [tc.make_doc_class](https://github.com/ISSKJ/toolc-dist/)