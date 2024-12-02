import React, { useState, useEffect } from 'react';
import './App.css'; // Ensure this includes the updated CSS styles

const enemies = [
    { name: 'Niebieski Szlam', hp: 10, gold: 1, exp: 5, image: 'blue_slime.png' },
    { name: 'Czerwony Szlam', hp: 12, gold: 2, exp: 7, image: 'red_slime.png' },
    { name: 'Bandyta', hp: 13, gold: 5, exp: 10, image: 'bandit.png' },
    { name: 'Upadły Mag', hp: 15, gold: 10, exp: 15, image: 'mage.png' }
];

function App() {
    const [points, setPoints] = useState(0);
    const [gold, setGold] = useState(0);
    const [level, setLevel] = useState(1);
    const [exp, setExp] = useState(0);
    const [clickValue, setClickValue] = useState(1);
    const [autoClicker, setAutoClicker] = useState(false);
    const [autoClickerCost, setAutoClickerCost] = useState(100);
    const [upgradeCost, setUpgradeCost] = useState(50);
    const [enemy, setEnemy] = useState(enemies[Math.floor(Math.random() * enemies.length)]);
    const [enemyHp, setEnemyHp] = useState(enemy.hp);

    const handleClick = () => {
        setEnemyHp((prevHp) => {
            const newHp = prevHp - clickValue;
            return newHp > 0 ? newHp : 0;
        });
    };

    const buyUpgrade = () => {
        if (points >= upgradeCost) {
            setPoints(points - upgradeCost);
            setClickValue(clickValue + 1);
            setUpgradeCost(upgradeCost * 2);
        }
    };

    const buyAutoClicker = () => {
        if (points >= autoClickerCost) {
            setPoints(points - autoClickerCost);
            setAutoClicker(true);
            setAutoClickerCost(autoClickerCost * 2);
        }
    };

    useEffect(() => {
        if (autoClicker) {
            const interval = setInterval(() => {
                handleClick();
            }, 1000);
            return () => clearInterval(interval);
        }
    }, [autoClicker]);

    useEffect(() => {
        if (enemyHp === 0) {
            setPoints((prevPoints) => prevPoints + enemy.gold);
            setGold((prevGold) => prevGold + enemy.gold);
            setExp((prevExp) => {
                const newExp = prevExp + enemy.exp;
                // Level up logic
                if (newExp >= level * 50) { // Example: 50 EXP per level
                    setLevel(prevLevel => prevLevel + 1); // Increase level
                    return newExp - level * 50; // Reset EXP to the excess amount
                }
                return newExp; // Normal case
            });

            const newEnemy = enemies[Math.floor(Math.random() * enemies.length)];
            setEnemy(newEnemy);
            setEnemyHp(newEnemy.hp);
        }
    }, [enemyHp, level]);

    const enemyHpPercentage = (enemyHp / enemy.hp) * 100;
    const expPercentage = (exp / (level * 50)) * 100; // Example: 50 EXP per level

    return (
        <div className="game-container">
            <header className="header">
                <h1 className="game-title">Clicker RPG</h1>
            </header>

            <main className="main-content">
                <div className="points-container">
                    <p className="points">Punkty: {points}</p>
                    <p className="gold">Złoto: {gold}</p>
                    <p className="level">Poziom: {level}</p>
                    <div className="exp-container">
                        <progress value={expPercentage} max="100" className="exp-bar"></progress>
                        <p>EXP: {exp}</p>
                    </div>
                </div>

                <div className="enemy-container" onClick={handleClick}>
                    <h2>Przeciwnik: {enemy.name}</h2>
                    <img src={enemy.image} alt={enemy.name} className="enemy-image" />
                    <progress value={enemyHpPercentage} max="100" className="hp-bar"></progress>
                    <p>HP Przeciwnika: {enemyHp}</p>
                    <p>Nagroda za pokonanie: {enemy.gold} złota</p>
                </div>

                <div className="side-menu">
                    <div className="button-container">
                        <button className="upgrade-button" onClick={buyUpgrade} disabled={points < upgradeCost}>
                            Kup Ulepszenie (+1 do wartości klika) - {upgradeCost} punktów
                        </button>

                        <button className="autoclicker-button" onClick={buyAutoClicker} disabled={points < autoClickerCost}>
                            Kup AutoClicker - {autoClickerCost} punktów
                        </button>
                    </div>
                </div>
            </main>

            <footer className="footer">
                <progress value={expPercentage} max="100" className="footer-progress-bar"></progress>
            </footer>
        </div>
    );
}

export default App;
