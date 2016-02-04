<?php 
namespace Cloudoki\Guardian;

use \Illuminate\Database\Eloquent\Model as Eloquent;

/**
 *	Role Model	
 *	Add the namespace if you want to extend your custom Role model with this one.	
 */

class Role extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * Fillables
	 * define which attributes are mass assignable (for security)
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description'];
	
    protected $dates = ['deleted_at'];
    
	/**
	 * Account relationship
	 *
	 * @return BelongsTo
	 */
	public function accounts ()
	{
		return $this->belongsTo ('Account');
	}
	
	/**
	 * Tokens relationship
	 *
	 * @return HasMany
	 */
	public function roletokens ()
	{
		return $this->hasMany ('RoleTokens');
	}

	/**
	 * Get role name
	 *
	 * @return	string
	 */
	public function getName ()
	{
		return $this->name;
	}

	/**
	 * Set role name
	 *
	 * @param	string	$name
	 */
	public function setName ($name)
	{
		$this->name = $name;
		
		return $this;
	}

	/**
	 * Get role description
	 *
	 * @return	string
	 */
	public function getDescription ()
	{
		return $this->description;
	}

	/**
	 * Set role description
	 *
	 * @param	string	$description
	 */
	public function setDescription ($description)
	{
		$this->description = $description;
		
		return $this;
	}

}
