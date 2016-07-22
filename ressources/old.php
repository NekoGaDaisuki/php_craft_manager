<div id='template' style='display:none'>
    <?php $xml_equipment = simplexml_load_file('xml/equipment.xml') or die('Error: Cannot create object'); ?>
    <div id='weapons_div' name='weapons_div'>
        <fieldset id='weapons_fieldset' name='weapons_fieldset'>
            <legend>
                Arme(s)
            </legend>
            <div id='weapon_div' name='weapon_div'>
                Arme :
                <select class='weapon' name='weapon'>
                    <optgroup label='Forge'>
                        <?php foreach ($xml_equipment->weapons->blacksmithing->children() as $weapon): ?>
                            <option><?php echo $weapon->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label='Travail du Bois'>
                        <?php foreach ($xml_equipment->weapons->woodworking->children() as $weapon): ?>
                            <option><?php echo $weapon->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
                Trait :
                <select class='trait' name='trait'>
                    <option>Aucun trait</option>
                    <?php foreach ($xml_equipment->traits->weaponsTraits->children() as $trait): ?>
                        <option><?php echo $trait->name; ?></option>
                    <?php endforeach; ?>
                </select>
                Niveau de l'arme :
                <select class='level' name='level'>
                    <optgroup label='Niveau 1 - 50'>
                        <option>Niveau 1</option>
                        <option>Niveau 4</option>
                        <option>Niveau 6</option>
                        <option>Niveau 8</option>
                        <option>Niveau 10</option>
                        <option>Niveau 12</option>
                        <option>Niveau 14</option>
                        <option>Niveau 16</option>
                        <option>Niveau 18</option>
                        <option>Niveau 20</option>
                        <option>Niveau 22</option>
                        <option>Niveau 24</option>
                        <option>Niveau 26</option>
                        <option>Niveau 28</option>
                        <option>Niveau 30</option>
                        <option>Niveau 32</option>
                        <option>Niveau 34</option>
                        <option>Niveau 36</option>
                        <option>Niveau 38</option>
                        <option>Niveau 40</option>
                        <option>Niveau 42</option>
                        <option>Niveau 44</option>
                        <option>Niveau 46</option>
                        <option>Niveau 48</option>
                        <option>Niveau 50</option>
                    </optgroup>
                    <optgroup label='Niveaux de Champion'>
                        <option>Champion 10</option>
                        <option>Champion 20</option>
                        <option>Champion 30</option>
                        <option>Champion 40</option>
                        <option>Champion 50</option>
                        <option>Champion 60</option>
                        <option>Champion 70</option>
                        <option>Champion 80</option>
                        <option>Champion 90</option>
                        <option>Champion 100</option>
                        <option>Champion 110</option>
                        <option>Champion 120</option>
                        <option>Champion 130</option>
                        <option>Champion 140</option>
                        <option>Champion 150</option>
                        <option>Champion 160</option>
                    </optgroup>
                </select>
                Style de l'arme :
                <select class='style' name='style'>
                    <optgroup label='Styles de base'>
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label='Styles rares'>
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label='Styles de Cyrodiil'>
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label="Styles d'Orsinium">
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label="Styles du Trépas des Cognées">
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label="Styles de la Côte d'or">
                        <?php ?>
                    </optgroup>
                </select>
                Qualité de l'arme :
                <select class='quality'>
                    <option>Basique</option>
                    <option>Raffiné</option>
                    <option>Supérieur</option>
                    <option>Artefact</option>
                    <option>Légendaire</option>
                </select>
            </div>
            <div class='row' id='weapons_button_div'>
                <input type='button' value='Ajouter une arme' id='weapons_add_button'>
            </div>
        </fieldset>
    </div>
    <!-- weapons_div -->
    <div id='armors_div'>
        <fieldset id='armors_fieldset'>
            <legend>
                Armure(s)
            </legend>
            <div id='armor_div'>
                Armure :
                <select class='weapon'>
                    <optgroup label='Couture (léger)'>
                        <?php foreach ($xml_equipment->armors->tailoring->light->children() as $armor): ?>
                            <option><?php echo $armor->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label='Couture (moyen)'>
                        <?php foreach ($xml_equipment->armors->tailoring->medium->children() as $armor): ?>
                            <option><?php echo $armor->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label='Forge (lourd)'>
                        <?php foreach ($xml_equipment->armors->blacksmithing->heavy->children() as $armor): ?>
                            <option><?php echo $armor->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label='Travail du Bois'>
                        <?php foreach ($xml_equipment->armors->woodworking->children() as $armor): ?>
                            <option><?php echo $armor->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
                Trait :
                <select class='trait'>
                    <option>Aucun trait</option>
                    <?php foreach ($xml_equipment->traits->armorsTraits->children() as $trait): ?>
                        <option><?php echo $trait->name; ?></option>
                    <?php endforeach; ?>
                </select>
                Niveau de l'armure :
                <select class='level'>
                    <optgroup label='Niveau 1 - 50'>
                        <option>Niveau 1</option>
                        <option>Niveau 4</option>
                        <option>Niveau 6</option>
                        <option>Niveau 8</option>
                        <option>Niveau 10</option>
                        <option>Niveau 12</option>
                        <option>Niveau 14</option>
                        <option>Niveau 16</option>
                        <option>Niveau 18</option>
                        <option>Niveau 20</option>
                        <option>Niveau 22</option>
                        <option>Niveau 24</option>
                        <option>Niveau 26</option>
                        <option>Niveau 28</option>
                        <option>Niveau 30</option>
                        <option>Niveau 32</option>
                        <option>Niveau 34</option>
                        <option>Niveau 36</option>
                        <option>Niveau 38</option>
                        <option>Niveau 40</option>
                        <option>Niveau 42</option>
                        <option>Niveau 44</option>
                        <option>Niveau 46</option>
                        <option>Niveau 48</option>
                        <option>Niveau 50</option>
                    </optgroup>
                    <optgroup label='Niveaux de Champion'>
                        <option>Champion 10</option>
                        <option>Champion 20</option>
                        <option>Champion 30</option>
                        <option>Champion 40</option>
                        <option>Champion 50</option>
                        <option>Champion 60</option>
                        <option>Champion 70</option>
                        <option>Champion 80</option>
                        <option>Champion 90</option>
                        <option>Champion 100</option>
                        <option>Champion 110</option>
                        <option>Champion 120</option>
                        <option>Champion 130</option>
                        <option>Champion 140</option>
                        <option>Champion 150</option>
                        <option>Champion 160</option>
                    </optgroup>
                </select>
                Style de l'armure :
                <select class='style'>
                    <optgroup label='Styles de base'>
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label='Styles rares'>
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label='Styles de Cyrodiil'>
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label="Styles d'Orsinium">
                        <?php
                        ?>
                    </optgroup>
                    <optgroup label="Styles du Trépas des Cognées">
                        <?php ?>
                    </optgroup>
                    <optgroup label="Styles de la Côte d'or">
                        <?php ?>
                    </optgroup>
                </select>
                Qualité de l'armure :
                <select class='quality'>
                    <option>Basique</option>
                    <option>Raffiné</option>
                    <option>Supérieur</option>
                    <option>Artefact</option>
                    <option>Légendaire</option>
                </select>
            </div>
            <div class='row' id='armors_button_div'>
                <input type='button' value='Ajouter une armure' id='armors_add_button'>
            </div>
        </fieldset>
    </div>
    <!-- armors_div -->
    <div id='enchanting_div'>
        <fieldset id='enchanting_fieldset'>
            <legend>
                Glyphe(s)
            </legend>
            <div class='row' id='glyph_div'>
                <?php $xml_enchanting = simplexml_load_file('xml/enchanting.xml') or die('Error: Cannot create object'); ?>
                Nom du glyphe :
                <select class="glyph">
                    <optgroup label="Glyphe d'armure">
                        <?php foreach ($xml_enchanting->glyphs->armorGlyphs->children() as $glyph): ?>
                            <option><?php echo $glyph->label; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Glyphe d'arme">
                        <?php foreach ($xml_enchanting->glyphs->weaponGlyphs->children() as $glyph): ?>
                            <option><?php echo $glyph->label; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Glyphe de bijou">
                        <?php foreach ($xml_enchanting->glyphs->jewelryGlyphs->children() as $glyph): ?>
                            <option><?php echo $glyph->label; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
                Niveau du glyphe :
                <select class="level">
                    <optgroup label='Niveau 1 - 50'>
                        <option>Niveau 1</option>
                        <option>Niveau 4</option>
                        <option>Niveau 6</option>
                        <option>Niveau 8</option>
                        <option>Niveau 10</option>
                        <option>Niveau 12</option>
                        <option>Niveau 14</option>
                        <option>Niveau 16</option>
                        <option>Niveau 18</option>
                        <option>Niveau 20</option>
                        <option>Niveau 22</option>
                        <option>Niveau 24</option>
                        <option>Niveau 26</option>
                        <option>Niveau 28</option>
                        <option>Niveau 30</option>
                        <option>Niveau 32</option>
                        <option>Niveau 34</option>
                        <option>Niveau 36</option>
                        <option>Niveau 38</option>
                        <option>Niveau 40</option>
                        <option>Niveau 42</option>
                        <option>Niveau 44</option>
                        <option>Niveau 46</option>
                        <option>Niveau 48</option>
                        <option>Niveau 50</option>
                    </optgroup>
                    <optgroup label='Niveaux de Champion'>
                        <option>Champion 10</option>
                        <option>Champion 20</option>
                        <option>Champion 30</option>
                        <option>Champion 40</option>
                        <option>Champion 50</option>
                        <option>Champion 60</option>
                        <option>Champion 70</option>
                        <option>Champion 80</option>
                        <option>Champion 90</option>
                        <option>Champion 100</option>
                        <option>Champion 110</option>
                        <option>Champion 120</option>
                        <option>Champion 130</option>
                        <option>Champion 140</option>
                        <option>Champion 150</option>
                        <option>Champion 160</option>
                    </optgroup>
                </select>
                Qualité du glyphe :
                <select class='quality'>
                    <option>Basique</option>
                    <option>Raffiné</option>
                    <option>Supérieur</option>
                    <option>Artefact</option>
                    <option>Légendaire</option>
                </select>
            </div>
            <div class='row' id='enchanting_button_div'>
                <input type='button' value='Ajouter un Glyphe' id='enchanting_add_button'>
            </div>
        </fieldset>
    </div>
    <!-- enchanting_div -->
    <div id='alchemy_div'>
        <fieldset id='alchemy_fieldset'>
            <legend>
                Préparations alchimiques
            </legend>
            <div class='row' id='potion_div'>
                <?php $xml_alchemy = simplexml_load_file("xml/alchemy.xml") or die("Error: Cannot create object"); ?>
                Solvant/Huile :
                <select class="solvant">
                    <optgroup label="Solvants (Niveau 1 - 50)">
                        <?php foreach ($xml_alchemy->solvents->lowLevel->children() as $solvent): ?>
                            <option><?php echo $solvent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Solvants (Niveaux de Champion)">
                        <?php foreach ($xml_alchemy->solvents->highLevel->children() as $solvent): ?>
                            <option><?php echo $solvent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Huiles (Niveau 1 - 50)">
                        <?php foreach ($xml_alchemy->oils->lowLevel->children() as $oil): ?>
                            <option><?php echo $oil->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Huiles (Niveaux de Champion)">
                        <?php foreach ($xml_alchemy->oils->highLevel->children() as $oil): ?>
                            <option><?php echo $oil->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
                Réactif 1 :
                <select class="firstReagent">
                    <optgroup label="Botaniste">
                        <?php foreach ($xml_alchemy->reagents->botanist->children() as $reagent): ?>
                            <option><?php echo $reagent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Toxicologue">
                        <?php foreach ($xml_alchemy->reagents->toxicologist->children() as $reagent): ?>
                            <option><?php echo $reagent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
                Réactif 2 :
                <select class="secondReagent">
                    <optgroup label="Botaniste">
                        <?php foreach ($xml_alchemy->reagents->botanist->children() as $reagent): ?>
                            <option><?php echo $reagent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Toxicologue">
                        <?php foreach ($xml_alchemy->reagents->toxicologist->children() as $reagent): ?>
                            <option><?php echo $reagent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
                Réactif 3 :
                <select class="thirdReagent">
                    <optgroup label="Botaniste">
                        <?php foreach ($xml_alchemy->reagents->botanist->children() as $reagent): ?>
                            <option><?php echo $reagent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Toxicologue">
                        <?php foreach ($xml_alchemy->reagents->toxicologist->children() as $reagent): ?>
                            <option><?php echo $reagent->name; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                </select>
            </div>
            <div class='row' id='alchemy_button_div'>
                <input type='button' value='Ajouter une préparation alchimique' id='alchemy_add_button'>
            </div>
        </fieldset>
    </div>
    <!-- alchemy_div -->
</div>
<!-- Template div end -->
<form method='post' action="<?php echo Plugin::createLink('send_form'); ?>" id='craft_form' onsubmit='return true;'>
    <fieldset id='user_field'>
        <legend>
            Votre User ID :
        </legend>
        <input type="text" name='user_field' />
    </fieldset>
    <br>
    <fieldset id='check_field'>
        <legend>
            Demande pour :
        </legend>
        <input type='checkbox' id='weapons_check' name='weapons_check'>
        Arme(s)</input>
        <input type='checkbox' id='armors_check' name='armors_check'>
        Armure(s)</input>
        <br>
        <input type='checkbox' id='enchanting_check' name='enchanting_check'>
        Glyphe(s)</input>
        <br>
        <input type='checkbox' id='alchemy_check' name='alchemy_check'>
        Préparations alchimiques</input>
    </fieldset>
    <div id='submit_field'>
        <input type='submit' value='Envoyer' />
    </div>
</form>
<script>$(document).ready(setup_form());</script>
