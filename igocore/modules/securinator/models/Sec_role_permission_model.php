<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Securinator / Security Role Permission Cross Reference Model
 *
 * Role to Permission mappings - permissions are assigned to roles
 */
class Sec_permission_model extends IGO_Model
{
    /** @var string Name of the table. */
    protected $table_name = 'sec_role_permissions';

    /** @var string Name of the primary key. */
    protected $key = 'id';

    /** @var bool Use soft deletes (if true). */
    protected $soft_deletes = false;

    /** @var string The date format to use. */
    protected $date_format = 'datetime';

    /** @var bool Set the created time automatically on a new record (if true). */
    protected $set_created = false;

    /** @var bool Set the modified time automatically on editing a record (if true). */
    protected $set_modified = false;


    //--------------------------------------------------------------------------

}