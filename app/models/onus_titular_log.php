<?php
/**
 * Modelo de onus_titular_log
 * La tabla en la base de datos es onus_titular_log
 * Es necesario especificar la tabla directamente para que est� en sigular hay que colocar:
 * static $table_name = 'vicidial_list';      
 * http://www.phpactiverecord.org/boards/4/topics/741
 * 
 * @access public
 * @author Ivan R. Chenoweth
 * @param  
 * @return mixed
 */
class onus_titular_log extends ActiveRecord\Model {
    static $table_name = 'onus_titular_log';        
} 
?>