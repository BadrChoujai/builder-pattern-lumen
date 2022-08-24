# Simple Robot Build In Lumen
Built a Simple Robot using The Builder Design pattern with laravel-lumen.

## Endpoints
- To Build Robots hit: `` /robots `` | `` GET ``
    - Payload:
    
        ```json
        {
            "robots_number": 1
        }
        ```
 
 - Response:
    - Successfull response ``200``:

        ```json
        {
            "robot": [
                {
                    "power_move": "Soul Eater",
                    "type": "Assistant Machine"
                }
            ]
        }
        ```
        
         - Faild response ``500``:

        ```json
        [
            "server error!! robot could'nt be built"
        ]
        ```
        
### For more info Official Documentation for lumen
Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

