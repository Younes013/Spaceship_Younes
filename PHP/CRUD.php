<?php
require_once 'Database.php';
require_once 'Entities/Spaceship.php';

class SpaceshipRepository {

    // CREATE
    public static function create(Spaceship $ship): void {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO spaceships (name, hp, attack) VALUES (?, ?, ?)"
        );
        $stmt->bind_param(
            "sii",
            $ship->getName(),
            $ship->getHP(),
            $ship->getAttack()
        );
        $stmt->execute();
        $stmt->close();
        $db->close();
    }

    // READ
    public static function getAll(): array {
        $db = Database::connect();
        $result = $db->query("SELECT * FROM spaceships");

        $ships = [];
        while ($row = $result->fetch_assoc()) {
            $ships[] = $row;
        }

        $db->close();
        return $ships;
    }

    // DELETE
    public static function delete(int $id): void {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM spaceships WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
}
