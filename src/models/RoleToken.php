<?php
namespace Cloudoki\Guardian;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleToken extends BaseModel
{
    use SoftDeletes;

    /**
     * The model type.
     *
     * @const string
     */
    const type = 'roletoken';

    protected $table = 'role_tokens';

    protected $fillable = ['slug','description'];

    /**
	 * Roles relationship
	 *
	 * @return BelongsToMany
	 */
	public function roles ()
	{
		return $this->belongsToMany ('Role');
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
