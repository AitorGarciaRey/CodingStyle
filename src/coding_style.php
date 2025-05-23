<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer;
use PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer;
use PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer;
use PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer;
use PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer;
use PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer;
use PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer;
use PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer;
use PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer;
use PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer;
use PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedTypesFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer;
use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\NoUselessConcatOperatorFixer;
use PhpCsFixer\Fixer\Operator\NoUselessNullsafeOperatorFixer;
use PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer;
use PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer;
use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\TypeDeclarationSpacesFixer;
use PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\CodingStandard\Fixer\Strict\BlankLineAfterStrictTypesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([SetList::PSR_12]);

    $ecsConfig->ruleWithConfiguration(
        BinaryOperatorSpacesFixer::class,
        [
            'operators' => [
                '='  => 'align_single_space_minimal',
                '=>' => 'align_single_space_minimal',
            ],
        ]
    );

    $ecsConfig->rules(
        [
            // Imports
            NoUnusedImportsFixer::class,
            FullyQualifiedStrictTypesFixer::class,
            GlobalNamespaceImportFixer::class,
            NoLeadingImportSlashFixer::class,
            OrderedImportsFixer::class,
            // Arrays
            TrimArraySpacesFixer::class,
            ArrayIndentationFixer::class,
            NoWhitespaceBeforeCommaInArrayFixer::class,
            WhitespaceAfterCommaInArrayFixer::class,
            // Blank lines
            BlankLineAfterStrictTypesFixer::class,
            NoBlankLinesAfterClassOpeningFixer::class,
            // Spacing
            SingleLineEmptyBodyFixer::class,
            CastSpacesFixer::class,
            TypeDeclarationSpacesFixer::class,
            MethodChainingIndentationFixer::class,
            // Casing
            ClassReferenceNameCasingFixer::class,
            LowercaseStaticReferenceFixer::class,
            MagicMethodCasingFixer::class,
            NativeFunctionCasingFixer::class,
            NativeFunctionTypeDeclarationCasingFixer::class,
            // Architecture
            ProtectedToPrivateFixer::class,
            VisibilityRequiredFixer::class,
            NoUselessElseFixer::class,
            // Operator
            AssignNullCoalescingToCoalesceEqualFixer::class,
            NoUselessConcatOperatorFixer::class,
            NoUselessNullsafeOperatorFixer::class,
            ObjectOperatorWithoutWhitespaceFixer::class,
            TernaryToElvisOperatorFixer::class,
            TernaryToNullCoalescingFixer::class,
            // Other
            LineLengthFixer::class,
            NoNullPropertyInitializationFixer::class,
            NoUnneededFinalMethodFixer::class,
            SelfAccessorFixer::class,
            SelfStaticAccessorFixer::class,
            NoUnneededControlParenthesesFixer::class,
            NoUnneededCurlyBracesFixer::class,
            SimplifiedIfReturnFixer::class,
            TrailingCommaInMultilineFixer::class,
            SingleQuoteFixer::class,
            StatementIndentationFixer::class,
        ]
    );

    $ecsConfig->ruleWithConfiguration(
        TypesSpacesFixer::class,
        ['space' => 'single', 'space_multiple_catch' => 'single']
    );
    $ecsConfig->ruleWithConfiguration(ArraySyntaxFixer::class, ['syntax' => 'short']);
    $ecsConfig->ruleWithConfiguration(LineLengthFixer::class, [LineLengthFixer::LINE_LENGTH => 120]);
    $ecsConfig->ruleWithConfiguration(
        YodaStyleFixer::class,
        ['equal' => false, 'identical' => false, 'less_and_greater' => false]
    );
    $ecsConfig->ruleWithConfiguration(OrderedTypesFixer::class, ['null_adjustment' => 'always_last']);
    $ecsConfig->indentation(Option::INDENTATION_SPACES);
};
