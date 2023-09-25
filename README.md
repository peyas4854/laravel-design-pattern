## Factory Pattern 

#### Multiple classes can be created from a single factory class
#### The factory class decides which class to instantiate based on the input
#### The factory class can be a singleton class
### The factory class follows the open-closed principle

### Test 

    url - http://127.0.0.1:8000/api/payment

###  params
    type - paypal (emxample)
     amount - 1000 (example)

### response 
    {
    "success": true,
    "message": "Payment has been processed with paypal, amount is 100"
    }

