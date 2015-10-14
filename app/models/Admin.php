<?php
	
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class Admin extends Eloquent implements UserInterface, RemindableInterface {

		/**
		 * Admin Modeli
		 *
		 * @var string
		 */
		protected $table = 'admin';

		/**
		 * The primary key of the table.
		 *
		 * @var string
		 */
		protected $primaryKey = 'admin_id';

		/**
		 * The attributes excluded from the model's JSON form.
		 *
		 * @var array
		 */
		protected $hidden = array('admin_password');

		/**
		 * Get the unique identifier for the user.
		 *
		 * @return mixed
		 */


		public function getAuthIdentifier()
		{
			return $this->getKey();
		}

		/**
		 * Get the password for the user.
		 *
		 * @return string
		 */
		public function getAuthPassword()
		{
			return $this->admin_password;
		}

		/**
		 * Get the e-mail address where password reminders are sent.
		 *
		 * @return string
		 */
		public function getReminderEmail()
		{
			return $this->admin_email;
		}

		public function getRememberToken()
		{
		    return $this->remember_token;
		}

		public function setRememberToken($value)
		{
		    $this->remember_token = $value;
		}

		public function getRememberTokenName()
		{
		    return 'remember_token';
		}

	}