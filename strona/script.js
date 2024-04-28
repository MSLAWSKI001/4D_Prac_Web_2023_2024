var gold = 0;
var entity_hp = 20;
var damage = 1;
var enemies = [
    { hp: 10, gold: 5, exp: 2, image: "bandit.png", spawnChance: 0.4 },
    { hp: 15, gold: 8, exp: 3, image: "barbarian.png", spawnChance: 0.3 },
    { hp: 20, gold: 10, exp: 5, image: "fallen_mage.png", spawnChance: 0.3 }
];
function Attack() {
    // Aktualizacja wartości złota
    document.getElementById("gold_txt").innerHTML = gold;
    
    // Aktualizacja wartości punktów życia przeciwnika
    entity_hp -= damage;
    document.getElementById("entityHealth").value = entity_hp;
    
    // Aktualizacja wartości wyświetlanej liczby punktów życia przeciwnika
    document.getElementById("hp").innerHTML = entity_hp;

    // Sprawdzenie, czy przeciwnik został pokonany
    if (entity_hp <= 0) {
        // Wybór nowego przeciwnika
        var totalSpawnChance = enemies.reduce((acc, enemy) => acc + enemy.spawnChance, 0);
        var randomChance = Math.random() * totalSpawnChance;
        var selectedEnemy = null;
        for (var i = 0; i < enemies.length; i++) {
            randomChance -= enemies[i].spawnChance;
            if (randomChance <= 0) {
                selectedEnemy = enemies[i];
                break;
            }
        }

        // Aktualizacja wartości złota po pokonaniu przeciwnika
        gold += selectedEnemy.gold;
        document.getElementById("gold_txt").innerHTML = gold;

        // Aktualizacja obrazka przycisku
        document.querySelector("button img").src = selectedEnemy.image;

        // Aktualizacja wartości maksymalnej i aktualnej punktów życia przeciwnika
        entity_hp = selectedEnemy.hp;
        document.getElementById("entityHealth").max = entity_hp;
        document.getElementById("entityHealth").value = entity_hp;

        // Aktualizacja wyświetlanej liczby punktów życia przeciwnika
        document.getElementById("hp").innerHTML = entity_hp;
    }
}
