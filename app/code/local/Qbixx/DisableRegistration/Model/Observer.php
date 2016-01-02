<?php
class Qbixx_DisableRegistration_Model_Observer
{

			public function disallowRegistration(Varien_Event_Observer $observer)
			{
				//Mage::dispatchEvent('admin_session_user_login_success', array('user'=>$user));
				//$user = $observer->getEvent()->getUser();
				//$user->doSomething();
        $observer->getResult()->setIsAllowed(false);
			}
		
}
