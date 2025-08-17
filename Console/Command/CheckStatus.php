<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\App\State;
use Magento\Framework\Module\Manager;

/**
 * Console command to check WhatsApp Chat module status
 */
class CheckStatus extends Command
{
    /**
     * @var State
     */
    private $state;

    /**
     * @var Manager
     */
    private $moduleManager;

    /**
     * @param State $state
     * @param Manager $moduleManager
     * @param string|null $name
     */
    public function __construct(
        State $state,
        Manager $moduleManager,
        string $name = null
    ) {
        parent::__construct($name);
        $this->state = $state;
        $this->moduleManager = $moduleManager;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('magoarab:whatsapp-chat:check-status')
            ->setDescription('Check WhatsApp Chat module status and configuration');

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $output->writeln('<info>WhatsApp Chat Module Status Check</info>');
            $output->writeln('=====================================');

            // Check if module is enabled
            $isEnabled = $this->moduleManager->isEnabled('MagoArab_WhatsappChat');
            $output->writeln(sprintf('Module Enabled: %s', $isEnabled ? '<info>Yes</info>' : '<error>No</error>'));

            if (!$isEnabled) {
                $output->writeln('<error>Module is not enabled. Please run: bin/magento module:enable MagoArab_WhatsappChat</error>');
                return \Magento\Framework\Console\Cli::RETURN_FAILURE;
            }

            // Check application mode
            $mode = $this->state->getMode();
            $output->writeln(sprintf('Application Mode: <info>%s</info>', $mode));

            // Check if routes are accessible
            $output->writeln('');
            $output->writeln('<info>Admin Routes:</info>');
            $output->writeln('- Settings: admin/whatsapp_chat/adminhtml_settings/');
            $output->writeln('- Contacts: admin/whatsapp_chat/adminhtml_contacts/');

            $output->writeln('');
            $output->writeln('<info>System Configuration:</info>');
            $output->writeln('- Path: admin/system_config/edit/section/whatsapp_chat/');

            $output->writeln('');
            $output->writeln('<info>Next Steps:</info>');
            $output->writeln('1. Clear cache: bin/magento cache:clean');
            $output->writeln('2. Check admin menu: MagoArab > WhatsApp Chat');
            $output->writeln('3. Check System > Configuration > MagoArab > WhatsApp Chat');

            return \Magento\Framework\Console\Cli::RETURN_SUCCESS;

        } catch (\Exception $e) {
            $output->writeln(sprintf('<error>Error: %s</error>', $e->getMessage()));
            return \Magento\Framework\Console\Cli::RETURN_FAILURE;
        }
    }
}
