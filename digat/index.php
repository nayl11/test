
<?php
                $flowers = [
                    ["name" => "Camomille", "description" => "Apaise les troubles digestifs et le stress.", "color" => "#f8d7da"],
                    ["name" => "Lavande", "description" => "Réduit l'anxiété et favorise le sommeil.", "color" => "#e2cffc"],
                    ["name" => "Calendula", "description" => "Soulage les irritations de la peau.", "color" => "#ffe4b5"],
                ];
                foreach ($flowers as $flower) {
                    echo "<div class='flower' style='background-color: {$flower['color']}'>";
                    echo "<h2>{$flower['name']}</h2>";
                    echo "<p>{$flower['description']}</p>";
                    echo "</div>";
                }
            ?>