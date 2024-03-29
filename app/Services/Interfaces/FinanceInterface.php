<?php
/**
 * Defines all the methods that make up the finance service
 */
namespace App\Services\Interfaces;

use App\Models\Ledger;
use App\Models\Section;
use App\Models\Transaction;

interface FinanceInterface {
  /**
   * Creates a new ledger to hold sections of transactions
   *
   * @param array $values
   */
  public function createLedger(array $values): Ledger;

  /**
   * Creates a section and attaches to a ledger
   *
   * @param Ledger $ledger - The Ledger to attach to
   * @param array $values - The Section values to be stored
   * @return Section
   */
  public function createSection(Ledger $ledger, array $values): Section;

  /**
   * Creates a transaction and attaches it to a section
   *
   * @param Section $section
   * @param array $values
   * @return Transaction
   */
  public function createTransaction(Section $section, array $values): Transaction;

  /**
   * Deletes a ledger and all of it's sections and transactions
   *
   * @param Ledger $ledger
   * @return void
   */
  public function deleteLedger(Ledger $ledger): void;

  /**
   * Updates a ledger's values 
   *
   * @param Ledger $ledger
   * @param array $values
   * @return void
   */
  public function updateLedger(Ledger $ledger, array $values): void;

  /**
   * Updates a section's values
   *
   * @param Section $section
   * @param array $values
   * @return void
   */
  public function updateSection(Section $section, array $values): void;

  /**
   * Updates a transaction's values
   *
   * @param Transaction $transaction
   * @param array $values
   * @return void
   */
  public function updateTransaction(Transaction $transaction, array $values): void;
}
