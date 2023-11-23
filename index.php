<script>
const Eris = require("eris");
const bot = new Eris("token");
bot.on("messageCreate", (msg) => {
    if(msg.author.id === "687047322664042550"){
        msg.addReaction(":clown:");
    }
});
bot.connect();
</script>