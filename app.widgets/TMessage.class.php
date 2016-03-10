<?php 

	class TMessage{

		private $button;

		public function __construct($type, $message){
			$style = new TStyle('tmessage');
			$style->position      = 'absolute';
			$style->left          = '30%';
			$style->top           = '30%';
			$style->width         = '300';
			$style->height        = '150';
			$style->color         = 'black';
			$style->background    = '#DDDDDD';
			$style->border        = '4px solid #000000';
			$style->z_index       = '100000';

			$style->show();

			$painel = new TElement('div');
			$painel->class = "tmessage";
			$painel->id    = "tmessage";

			$button = new TElement('input');
			$button->type = 'button';
			$button->value = 'Fechar';
			$button->onClick="document.getElementById('tmessage').style.display='none'";

			$table = new TTable;
			$table->align = 'center';

			$row=$table->addRow();			
			$row->addCell(new TImage("app.images/{$type}.png"));
			$row->addCell($message);

			$row=$table->addRow();
			$row->addCell('');
			$row->addCell($button);

			$painel->add($table);
			$painel->show();
		}

	}

 ?>