// User must be able to enter his credit card details
//

<?php

/**
 * Created by PhpStorm.
 * User: fariza
 * Date: 28/08/16
 * Time: 18:34
 */

public class usr  {

    /**
     * @param $Credit
     */
    public function setCreditCard ($Credit){
        $userCredit = new Credit();
        $userCredit->setCredit ($Credit);
)
    }


}

class Credit {
    var $userCredit ;
    public function setCredit($Cerdit){
        $userCredit = $Cerdit;
    }
    public function getCredit(){

return $this-> $userCredit;
    }

}
class userAuth extends TestClass
{
public function testUserCredit (){
$usrCredit = new Credit();  
    $usrCredit->setCredit('123456');
    $this->assertEquals('123456',$usrCredit->getCredit());

}
}
