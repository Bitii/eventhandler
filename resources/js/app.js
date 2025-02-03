import './bootstrap';
import 'bootstrap';
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

$(function ()
{
    $('#addParticipant').on('click', function (e)
    {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('/events', formData)
            .then(function (response)
            {
                console.log(response);
            })
            .catch(function (error)
            {
                console.log(error);
        })
    
    })
})