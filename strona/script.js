var gold = 0;
var entity_hp = 19;
var dammage = 1;
function Atack() {
    document.getElementById("hp").innerHTML = entity_hp;
    document.getElementById("gold_txt").innerHTML = gold;
    entity_hp-=dammage;
    if (entity_hp < 0) {
        entity_hp = 19;
        gold = gold + 2;
    }
    
}