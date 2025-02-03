import "./bootstrap";
import "bootstrap";
import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

$(function () {
    /* Felhasználó hozzáadása az aktuális eventhez */
    $("#addParticipant").on("click", function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios
            .post("/eventparticipants", formData)
            .then(function (response) {
                console.log(response);
                location.reload();
            })
            .catch(function (error) {
                console.log(error);
            });
    });

    /* Felhasználó törlése az aktuaális eventről */

    let selectedEventId;
    $(document).on("click", "#userDelBtn", function (e) {
        selectedEventId = $(this).data("eventId");
        console.log(selectedEventId);
    });

    $("#delParticipant").on("click", function (e)
    {
        e.preventDefault();
        console.log(selectedEventId);
        axios
            .delete(`/eventparticipants/${selectedEventId}`)
            .then((response) => {
                console.log(response);
                location.reload();
            })
            .catch((error) => {
                console.log(error);
            });
    });
});
