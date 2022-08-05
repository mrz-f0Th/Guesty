const qrcode = require('qrcode-terminal')
const fs = require('fs');

const {
    Client
} = require('whatsapp-web.js')
const client = new Client()

client.on('qr', qr => {
    qrcode.generate(qr, {
        small: true
    })
})

client.on('ready', () => {
    console.log('client is ready!')
    const file = '../../../public/readPin.json'

    fs.watchFile(file, () => {
        fs.readFile(file, "utf8", async (err, data) => {
            if (err) throw err;

            const parsing = JSON.parse(data);

            const number_details = await client.getNumberId(parsing.data.telepon); // get mobile number details

            if (number_details) {
                await client.sendMessage(number_details._serialized,
                    `GUESM,\nJangan bagikan kode pin ini pada siapapun, kode pin anda : ${parsing.data.pin}`); // send message
            } else {
                console.log(parsing.data.telepon, "Mobile number is not registered");
            }
        })
    })
})

client.on('message', message => {
    if (message.body === '!ping') {
        client.sendMessage(message.from, 'pong');
    } else if (message.body === 'Siapa yang paling ganteng ?') {
        client.sendMessage(message.from, 'RAKA KUN!!! (♡ヮ♡)');
    }
})




client.initialize()