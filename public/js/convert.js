$(document).ready( function (  ){

    $('#ConvertButton').click( function (  ){

        let sum = $('#dollarInput').val();


        if (/^[0-9]*[.,]?[0-9]+$/i.test(sum) === false) {
            $('#errorInput').fadeIn(500).delay( 5000 ).fadeOut( 500 );

        }//if
        else{

            let name = $('#currencesList').val();

            $.ajax({
                'url': `${window.paths.AjaxServerUrl}${window.paths.getSum}`,
                'type': 'GET',
                'data': {
                    'name': name,
                },
                'success': (data) => {
                    let status = data.code;

                    if (status === 200) {
                        let rate_obj = data.rate;
                        console.log(rate_obj);

                        let key = "USD_"+ name;
                        console.log(key);
                        let rate = +rate_obj[key];
                        console.log(rate);
                        let total = sum*rate;
                        let totalSum = total.toFixed(2);
                        $('#totalLabel').text(sum+" USD = "+totalSum+" "+name);
                        $('#totalLabel').fadeIn(500).delay( 5000 ).fadeOut( 500 );

                    }//if
                    else {
                        $('#totalLabel').text("Конвертация не удалась!");
                        $('#totalLabel').fadeIn(500).delay( 5000 ).fadeOut( 500 );
                    }//else
                }

            });
        }

    }  );


});