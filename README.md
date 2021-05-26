# Advanced approval

The module `sv-approval-advanced` is an extension to the [Approval process automation][1] extension.
This module provides multiple levels of approval instead of the 2 levels of said extension.

The additions made in this module were initially [submitted][2] as improvements to the original module,
but until they are merged we wanted everybody to be able to use it already.
If there is a lot of interest we can provide an update of this module that also does the migration of the old approval rules.

## Installation

Place this in the `extensions` folder of your iTop instance and run iTop setup again.
Be sure to enable the extension during setup.

## Preview

![Approval rule levels](images/rule-level-list.png)

![Edition of rule levels](images/rule-level-edit.png)

Approval status example with 4 levels of approval:
![Approval status](images/approval-status.png)

## Contribute

### Translation

Translations can be submitted via [Transifex][3].
Please create a new issue if you want a new language to be added to the project.

[1]: https://store.itophub.io/en_US/products/combodo-approval-process-automation
[2]: https://github.com/Combodo/combodo-approval-extended/pull/2
[3]: https://www.transifex.com/super-visions/sv-approval-advanced
