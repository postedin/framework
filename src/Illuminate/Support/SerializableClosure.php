<?php namespace Illuminate\Support;

use Jeremeamia\SuperClosure\SerializableClosure as SuperClosure;

/**
 * Extends SuperClosure for backwards compatibility.
 */
class SerializableClosure extends SuperClosure {

	/**
	 * The code for the closure
	 *
	 * @var string
	 */
	protected $code;

	/**
	 * The variables that were "used" or imported from the parent scope
	 *
	 * @var array
	 */
	protected $variables;

	/**
	 * Returns the code of the closure being serialized
	 *
	 * @return string
	 */
	public function getCode()
	{
		$this->determineCodeAndVariables();

		return $this->code;
	}

	/**
	 * Returns the "used" variables of the closure being serialized
	 *
	 * @return array
	 */
	public function getVariables()
	{
		$this->determineCodeAndVariables();

		return $this->variables;
	}

	/**
	 * Uses the serialize method directly to lazily fetch the code and variables if needed
	 */
	protected function determineCodeAndVariables()
	{
		if ( ! $this->code)
		{
			list($this->code, $this->variables) = unserialize($this->serialize());
		}
	}

	/**
     * Unserializes the closure data and recreates the closure. Attempts to recreate the closure's context as well by
     * extracting the used variables into the scope. Variables names in this method are surrounded with underlines in
     * order to prevent collisions with the variables in the context. NOTE: There be dragons here! Both `eval` and
     * `extract` are used in this method
     *
     * @param string $__serialized__
     */
    public function unserialize($__serialized__)
    {
        // Unserialize the data we need to reconstruct the SuperClosure
		$this->state = unserialize($__serialized__);
        list('code' => $__code__, 'context' => $__context__) = $this->state;

        // Simulate the original context the Closure was created in
        extract($__context__);

        // Evaluate the code to recreate the Closure
        eval("\$this->closure = {$__code__};");
    }
}
