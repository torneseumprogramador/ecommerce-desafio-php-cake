<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $telefone
 * @property string $email
 * @property string $endereco
 */
class Cliente extends Entity
{
    protected array $_accessible = [
        'id' => true,
        'nome' => true,
        'telefone' => true,
        'email' => true,
        'endereco' => true,
    ];
}
