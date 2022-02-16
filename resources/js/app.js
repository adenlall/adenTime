

let cbox = document.querySelectorAll(".xele");
bgd = [
    `${document.querySelector("#immg0").src}`,
    `${document.querySelector("#immg1").src}`,
    `${document.querySelector("#immg2").src}`,
    `${document.querySelector("#immg3").src}`,
    `${document.querySelector("#immg4").src}`,
    `${document.querySelector("#immg5").src}`,
];
txd = [
    'UEFA Champions League',
    'Premier League',
    'Serie A',
    'Primera Division',
    'Bundesliga',
    'Ligue 1',
];

for (let i = 0; i < cbox.length; i++) {
    cbox[i].addEventListener('click', function () {
        document.querySelector('#comps').innerHTML = `Compitition Selected : ${txd[i]}`;
        document.querySelector('#tyyt').src = `${bgd[i]}`;
        document.querySelector('input[name="compitition"]').value = `${txd[i]}`;
    })
}

