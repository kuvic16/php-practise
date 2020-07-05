<?php

class ChargeRejected extends Exception
{
}

class NotEnoughFunds extends Exception
{
}

class ExceptionTest
{
    public function subscribe()
    {
        //var_dump("subscribing");
        throw new NotEnoughFunds;
    }
}

function flash($message)
{
    var_dump($message);
}

try {
    (new ExceptionTest)->subscribe();
    // } catch (ChargeRejected $e) {
    //     flash('Failed');
    // } catch (NotEnoughFunds $e) {
    //     flash('Failed');
    // }
} catch (ChargeRejected | NotEnoughFunds $e) {
    flash('Failed');
}
