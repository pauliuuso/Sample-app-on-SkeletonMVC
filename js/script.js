$(document).ready(function()
{
    
    $(document).on("click", "#edit-btn", function(e)
    {
        var note = $(this).parent().parent().find(".note p").text();
        var id = parseInt($(this).parent().parent().find(".val").html());
        $("#note-id").val(id);
        $("#note-input").val(note);
        $("#cancel-btn").removeClass("hidden");
        goBottom();
    });
    
    $(document).on("click", "#cancel-btn", function(e)
    {
        e.preventDefault();
        $("#note-id").val(0);
        $("#note-input").val("");
        $("#cancel-btn").addClass("hidden");
    });
    
    function urlify()
    {
        var urlReg = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
        $(".note p").each(function(index)
        {
            var urlText = $(this).html();
            var urlResult = urlText.match(urlReg);
            if(urlResult)
            {
                urlText = urlText.replace(urlReg, "<a href='$1' target='_blank'>$1</a>");
                $(this).html(urlText);
            }
        });
    };
    
    function goBottom()
    {
        messageBoard = $("html, body");
        messageBoard.scrollTop(messageBoard.prop("scrollHeight"));
    };
    
    urlify();
    
});