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

                    let genreId = +data.genreID;
                    let status = +data.status;

                    if (status === 200 && genreId !== 0) {

                        $('#errorMessage').fadeOut(1000);
                        $('#successMessage').fadeIn(500).delay( 5000 ).fadeOut( 500 );;

                    }//if
                    else {
                        $('#successMessage').fadeOut(1000);
                        $('#errorMessage').fadeIn(500).delay( 5000 ).fadeOut( 500 );;
                    }//else
                }

            });
        }

    }  );


});