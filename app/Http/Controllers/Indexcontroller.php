<?php


$("#add").click(function() {
 
    $.ajax({
        type: 'post',
        url: '/addItem',
        data: {
            '_token': $('input[name=_token]').val(),
            'name': $('input[name=name]').val()
        },
        success: function(data) {
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.name);
            } else {
                $('.error').remove();
                $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        },
    });
    $('#name').val('');
});

public function addItem(Request $request) {
    $rules = array (
            'name' => 'required'
    );
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (
                    
                'errors' => $validator->getMessageBag ()->toArray ()
        ) );
        else {
            $data = new Data ();
            $data->name = $request->name;
            $data->save ();
            return response ()->json ( $data );
        }
}