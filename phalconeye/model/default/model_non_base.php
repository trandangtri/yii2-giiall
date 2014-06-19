<?php

echo "<?php\n";
?>

namespace <?= $generator->ns ?>;

use Engine\Db\AbstractModel;

/**
 * This is the model class for table "<?= $tableName ?>".
 *
 * @category  PhalconEye
 * @package   <?= $generator->ns . "\n" ?>
 * @author    Name <email@domain.com>
 * @copyright 2013-2014 vSourceIO Team
 * @license   New BSD License
 * @link      http://vsource.io/
 *
 * @Source("<?= $tableName ?>")
<?php if (!empty($relations)): ?>
<?php foreach ($relations as $name => $relation): ?>
<?php foreach ($relation['refs'] as $ref): ?>
 * <?= $ref . "\n" ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endif; ?>
 */
class <?= $className ?> extends <?= ltrim($generator->baseClass, '\\') ?> {
<?php foreach ($tableSchema->columns as $column): ?>

	/**
<?php if ($column->isPrimaryKey) : ?>
	 * @Primary
<?php endif; ?>
<?php if ($column->autoIncrement) : ?>
	 * @Identity
<?php endif; ?>
	 * @Column(<?= "type=\"{$column->phpType}\", nullable=" . ($column->allowNull?'true':'false') .", column=\"$column->name\"" . ($column->size!==null ? ", size=\"$column->size\"" : "") . ")\n" ?>
	 */
	public $<?= $column->name ?>;
<?php endforeach; ?>

}
