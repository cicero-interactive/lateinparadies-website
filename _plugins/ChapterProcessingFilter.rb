module ChapterProcessingFilter
	def process_chapters(chapterArray)
		chapterNumber = 0;

		if chapterArray
			for chapter in chapterArray do

				# Assign missing chapter numbers
				if chapter["number"] == nil
					chapter["number"] = chapterNumber + 1;
					chapterNumber = chapter["number"];
				else
					chapterNumber = chapter["number"];
				end

				# Assign display name
				if chapter["number"] && chapter["number"] != "/"
					if chapter["number"] == 0
						chapter["display-name"] = "Prolog"
					else
						chapter["display-name"] = "Kapitel " + chapter["number"].to_s
					end
				end
				if chapter["name"] && chapter["name"] != "/"
					chapter["display-name"] += ": " + chapter["name"]
				end

				# Assign missing footnote numbers
				if chapter["footnotes"]
					footnoteNumber = 0;
					for footnote in chapter["footnotes"] do
						if footnote["number"] == nil
							footnote["number"] = footnoteNumber + 1;
							footnoteNumber = footnote["number"];
						else
							footnoteNumber = footnote["number"];
						end
					end
				end
			end
		end
	end
end

Liquid::Template.register_filter(ChapterProcessingFilter)