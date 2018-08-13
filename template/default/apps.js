var conn = new WebSocket('ws://localhost:8888');
conn.onopen = function(e) {
    //console.log("Connection established!");
    conn.send("Here's some text that the server is urgently awaiting!"); 
};

conn.onmessage = function(e) {
    $("#lastprices").text(e.data);
};