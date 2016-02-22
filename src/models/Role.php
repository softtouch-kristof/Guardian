<?php
namespace Cloudoki\Guardian;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends BaseModel
{
    use SoftDeletes;

    /**
     * The model type.
     *
     * @const string
     */
    const type = 'role';


    protected $fillable = ['slug','description'];

    /**
	 * Roles relationship
	 *
	 * @return BelongsToMany
	 */
	public function rolegroups ()
	{
		return $this->belongsToMany ('Cloudoki\Guardian\Rolegroup');
	}

    /**
	 * Get role slug
	 *
	 * @return	string
	 */
	public function getSlug ()
	{
		return $this->name;
	}

	/**
	 * Set role slug
	 *
	 * @param	string	$slug
	 */
	public function setSlug ($slug)
	{
		$this->name = $slug;
		
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
